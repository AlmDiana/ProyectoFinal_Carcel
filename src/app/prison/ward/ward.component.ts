import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { ClientelaravelService } from 'src/app/service/clientelaravel.service';
import { Ward } from 'src/app/service/Ward';

@Component({
  selector: 'app-ward',
  templateUrl: './ward.component.html',
  styleUrls: ['./ward.component.css']
})
export class WardComponent implements OnInit {
  // Array para almacenar info de api
  wards: Ward[] = [];
  //Instancia  de tipo form group
  myFormWard!: FormGroup;
  actualizar:boolean = false;
  textBtn:string="Register";

  //Inyecto servicio con info de api y presenta en consola
  constructor (public servc:ClientelaravelService)
  {
    this.servc.getWards().subscribe(r=>{
      console.warn(r); //consola
      console.table(r[0]);
    })
  }
  //Cilo de vida de componente, info se carga automaticamente en la pag 
  ngOnInit(): void {
      this.getWardsComponent()
      //Inicialmente input vacios, luego se guarda en variables cada uno de los input del formulario
      this.myFormWard = new FormGroup({
        idF : new FormControl(''),
        nameF: new FormControl(''),
        locationF: new FormControl(''),
        descriptionF: new FormControl(''),
      });
  }
  // Permite almacenar info de api en array
  getWardsComponent() {
    this.servc.getWards().subscribe((r) => {
      return this.wards = r;
    });
  }

  addWardComponent()
  {
    if (this.actualizar==false)
    {
      //Se recupera info guardada en variables
    const name = this.myFormWard.value.nameF;
    const location = this.myFormWard.value.locationF;
    const description = this.myFormWard.value.descriptionF;
      // Se llena al método addward especificado del servicio
    this.servc.addWard(name, location, description).subscribe((r) =>
    {
        //Se cargan info de pabellones
        this.getWardsComponent();
        // Se limpia info cada que se registra datos en el formulario
        this.myFormWard = new FormGroup({
          idF : new FormControl(''),
          nameF: new FormControl(''),
          locationF: new FormControl(''),
          descriptionF: new FormControl(''),
        });
      });
    }
    else
    {
      const id = this.myFormWard.value.idF;
      const name = this.myFormWard.value.nameF;
      const location = this.myFormWard.value.locationF;
      const description = this.myFormWard.value.descriptionF;
      this.servc
        .updateWard(name, location, description,id)
        .subscribe((r) =>
        {
          this.getWardsComponent();

          this.myFormWard = new FormGroup({
            idF : new FormControl(''),
            nameF: new FormControl(''),
            locationF: new FormControl(''),
            descriptionF: new FormControl(''),
          });
          this.textBtn = "Register"
        });

    }

  }

  updateWardComponent(id:any)
  {
    this.servc.getWardById(id).subscribe((r) =>
    {
      this.myFormWard = new FormGroup({
        idF : new FormControl(`${r.id}`),
        nameF: new FormControl(`${r.name}`),
        locationF: new FormControl(`${r.location}`),
        descriptionF: new FormControl(`${r.description}`)
      });
      this.actualizar = true;
      this.textBtn = "Update"
    });
  }

  deleteWard(id:any)
  {
    console.warn(id)
    if (!confirm('ALERTA!! va a proceder a dar de baja este pabellón'))
    {
      return false;
    }
    else
    {
      this.servc.deleteWard(id).subscribe((r) =>
      {
        this.getWardsComponent();
      });
      return true;
    }
  }

}