import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Ward } from './Ward';
import { Login} from './Login';
import { Report } from './Report';



@Injectable({
  providedIn: 'root'
})
export class ClientelaravelService {
  
  //Inyección de dependencias
  constructor(private httpc: HttpClient)
  { }
  

  //URL a consumir, cambiar por HEROKU 
  wardsUrl:string = "http://localhost:8000/api/wards"
  //Inyección de dependencias
  
  // Recibe array desde URL, Se esepcifica interfaz Ward
  getWards(): Observable<Ward[]>
  {
    let token :any;
    token =localStorage.getItem('tokenUser');
    let tokenBearer='Bearer ' + token;
    console.log("tokenuser",tokenBearer)
    let reqHeader = new HttpHeaders({'Authorization':tokenBearer});
    return this.httpc.get<Ward[]>(this.wardsUrl,{headers:reqHeader})
  }

  // Para envío de datos
  addWard(name:string, location:string, description:string)
  {
    let objectWard: Ward = { name, location, description }
    let token :any;
     token =localStorage.getItem('tokenUser');
     let tokenBearer='Bearer ' + token;
     console.log("tokenuser",tokenBearer)
    let reqHeader = new HttpHeaders({'Authorization':tokenBearer});

    return this.httpc.post(this.wardsUrl, objectWard,{headers:reqHeader});
  }
  deleteWard(idWard:any)
  {
    
    let token :any;
    token =localStorage.getItem('tokenUser');
    let tokenBearer='Bearer ' + token;
    console.log("tokenuser",tokenBearer)
    let reqHeader = new HttpHeaders({'Authorization':tokenBearer});
    
    return this.httpc.delete(`${this.wardsUrl}/${idWard}`,{headers:reqHeader})
  }



  updateWard(name:string, location:string, description:string,idWard:any)
  {
    let token :any;
     token =localStorage.getItem('tokenUser');
     let tokenBearer='Bearer ' + token;
     console.log("tokenuser",tokenBearer)
    let reqHeader = new HttpHeaders({'Authorization':tokenBearer});
    let objectWardd:Ward = {name,location,description}
    return this.httpc.put(`${this.wardsUrl}/${idWard}`,objectWardd,{headers:reqHeader})
  }

  getWardById(idWard:any)
  {
    let token :any;
    token =localStorage.getItem('tokenUser');
    let tokenBearer='Bearer ' + token;
    console.log("tokenuser",tokenBearer)
    let reqHeader = new HttpHeaders({'Authorization':tokenBearer});
    console.warn(idWard)
    return this.httpc.get<Ward>(`${this.wardsUrl}/${idWard}`,{headers:reqHeader});
  }
  

  //-----------------------------------------------------------REPORTE
    //URL a consumir, cambiar por HEROKU REPORT
  reportUrl:string = "http://localhost:8000/api/reports"
  //Inyección de dependencias
  
  // Recibe array desde URL, Se esepcifica interfaz REPORT
  getReports(): Observable<Report[]>
  {
    return this.httpc.get<Report[]>(this.reportUrl)
  }

  getReportById(idReport:any)
  {
    console.warn(idReport)
    return this.httpc.get<Report>(`${this.reportUrl}/${idReport}`);
  }
  // Para envío de datos
  addReport(title:string, description:string, author:string, image:string)
  {

    let objectReport:Report = {title,author, description, image}
    console.warn(objectReport)
     return this.httpc.post(this.reportUrl,objectReport);
  }
  updateReport(title:string, description:string, author:string, image:string, idReport:any)
  {
    let objectReport:Report = {title,author, description,image}
    return this.httpc.put(`${this.reportUrl}/${idReport}`,objectReport)
  }


  
  
}