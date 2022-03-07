import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { ReactiveFormsModule } from '@angular/forms';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { WardComponent } from './prison/ward/ward.component';
import { LoginComponent } from './prison/login/login.component';
import { ReportComponent } from './prison/report/report.component';
import { AlertaComponent } from './alerta/alerta.component';
import { HomeComponent } from './prison/home/home.component';


@NgModule({
  declarations: [
    AppComponent,
    WardComponent,
    LoginComponent,
    ReportComponent,
    AlertaComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
