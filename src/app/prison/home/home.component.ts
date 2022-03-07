import { Component, OnInit } from '@angular/core';
import { LoginLaravelService } from 'src/app/service/loginlaravel.service';
import { ClientelaravelService } from 'src/app/service/clientelaravel.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor( ) { }

  ngOnInit(): void {
  
  }
  closelog(){
    
  }
  
}
