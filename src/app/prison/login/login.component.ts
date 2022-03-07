import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Token } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';

import { ClientelaravelService } from 'src/app/service/clientelaravel.service';
import { Login } from 'src/app/service/Login';
import { LoginLaravelService } from 'src/app/service/loginlaravel.service';


@Component({
  selector: 'LoginLaravelService',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  // Array para almacenar info de api
  logins: Login[] = [];
  
  //Instancia  de tipo form group
  myFormLogin!: FormGroup;
  actualizar:boolean = false;
  textBtn:string="Log in";
  constructor (private http:LoginLaravelService)
  {
   
  }

  //Cilo de vida de componente, info se carga automaticamente en la pag 
  ngOnInit(): void {
    this.myFormLogin = new FormGroup({
      login_field: new FormControl(''),
      password: new FormControl(''),
    });
   }
   loginComponent() {
    
    console.log(this.myFormLogin.value.login_field);
    console.log(this.myFormLogin.value.password);
    const login_field = this.myFormLogin.value.login_field;
    const password = this.myFormLogin.value.password;
    this.http.loginUser(login_field, password).subscribe((r) => {
      console.log("inicio de sesión con exito",r);
      localStorage.setItem('tokenUser', r.token);
      if (!confirm('YOU HAVE SUCCESFULLY LOGGED IN!'))
    {
      return false;
    }
    else
    {
      return true;
    }
    }, (error) => {
      const body = { title: 'No se ha podido iniciar sesión'};
      console.log("Fallo al iniciar, error", error);
     
    });

    


  }
  


  

}