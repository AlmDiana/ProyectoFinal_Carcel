import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Login } from './Login';
import { HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class LoginLaravelService {
  headers = new Headers();
  
  loginUrl: string = "https://prisonsystem.herokuapp.com/api/login";
  
  token:string = " "
  constructor(private httpc: HttpClient, private router: Router) { 
    
  }

  loginUser(login_field: string, password: string) {
    let objectLogin: Login = { login_field, password }
    return this.httpc.post<any>(this.loginUrl, objectLogin);
  }
  
}