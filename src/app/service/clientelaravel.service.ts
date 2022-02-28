import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Ward } from './Ward';

@Injectable({
  providedIn: 'root'
})
export class ClientelaravelService {
  //URL a consumir, cambiar por HEROKU 
  wardsUrl:string = "http://localhost:8000/api/wards"
  //Inyección de dependencias
  constructor(private httpc: HttpClient)
  { }
  // Recibe array desde URL, Se esepcifica interfaz Ward
  getWards(): Observable<Ward[]>
  {
    return this.httpc.get<Ward[]>(this.wardsUrl)
  }

  // Para envío de datos
  addWard(name:string, location:string, description:string)
  {
    let objectWard:Ward = {name,location,description}

     return this.httpc.post(this.wardsUrl,objectWard);
  }



  deleteWard(idWard:any)
  {
    return this.httpc.delete(`${this.wardsUrl}/${idWard}`)
  }



  updateWard(name:string, location:string, description:string,idWard:any)
  {
    let objectWard:Ward = {name,location,description}
    return this.httpc.put(`${this.wardsUrl}/${idWard}`,objectWard)
  }

  getWardById(idWard:any)
  {
    return this.httpc.get<Ward>(`${this.wardsUrl}/${idWard}`);
  }

  
}