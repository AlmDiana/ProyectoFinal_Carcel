import { Component } from '@angular/core';
import { ClientelaravelService } from './service/clientelaravel.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
  export class AppComponent {
    title = 'frontend';
    //Se llama el servicio al componente
    constructor (public servc:ClientelaravelService)
      {
      this.servc.getWards().subscribe(r=>{
      console.warn(r); //Presentación de info en consola
      console.table(r[0]);
      })
    } 

    log_out(){
      this.servc.logout();
      if (!confirm('YOU HAVE LOGGED OUT!'))
    {
      
      return false;
    }
    else
    {
      return true;
    }
      console.log("salir")
    }
    
  }