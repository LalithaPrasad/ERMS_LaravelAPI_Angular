import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { TokenService } from './token.service';
import { EmpDataResolveService } from './empdata-resolve.service';

@NgModule({
    declarations: [AppComponent],
    imports: [BrowserModule, AppRoutingModule, HttpClientModule],
    providers: [TokenService, EmpDataResolveService],
    bootstrap: [AppComponent]
})
export class AppModule { }
