import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { ClientelaravelService } from 'src/app/service/clientelaravel.service';
import { Report } from 'src/app/service/Report';

@Component({
  selector: 'app-report',
  templateUrl: './report.component.html',
  styleUrls: ['./report.component.css']
})
export class ReportComponent implements OnInit {

 // Array para almacenar info de api
  reports: Report[] = [];
  

  //Inyecto servicio con info de api y presenta en consola
  constructor (public servc:ClientelaravelService)
  {
    this.servc.getReports().subscribe(r=>{
      console.warn(r); //consola
      console.table(r[0]);
      this.reports = r;
    })
  }

  //Ciclo de vida de componente, info se carga automaticamente en la pag 
  ngOnInit(): void {
      this.getReportsComponent();
      console.log("diana");
      console.log(this.reports);
      
  }
  getReportsComponent() {
    this.servc.getReports().subscribe((r) => {
      return this.reports = r;
    });
  }
}
