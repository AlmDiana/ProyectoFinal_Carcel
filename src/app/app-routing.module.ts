import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './prison/home/home.component';

import { LoginComponent } from './prison/login/login.component';
import { ReportComponent } from './prison/report/report.component';
import { WardComponent } from './prison/ward/ward.component';


// Se agrega componentes login y ward
const routes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'wards', component: WardComponent },
  { path: 'login', component: LoginComponent },
  { path: 'report', component: ReportComponent},
  { path: '**', redirectTo: '/', pathMatch:'prefix' }
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }