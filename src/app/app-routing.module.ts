import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './prison/login/login.component';
import { WardComponent } from './prison/ward/ward.component';

// Se agrega componentes login y ward
const routes: Routes = [
  { path: 'wards', component: WardComponent },
  { path: 'login', component: LoginComponent },
  { path: '**', redirectTo: '/', pathMatch:'prefix' }
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }