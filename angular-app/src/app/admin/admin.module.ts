import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AdminRoutingModule } from './admin-routing.module';

import { LoginComponent } from './login/login.component';
import { SignupComponent } from './signup/signup.component';
import { LogoutComponent } from './logout/logout.component';
import { MenuComponent } from './menu/menu.component';

@NgModule({
    declarations: [LoginComponent, SignupComponent, LogoutComponent, MenuComponent],
    imports: [CommonModule, AdminRoutingModule, FormsModule, HttpClientModule],
    exports: [LoginComponent, SignupComponent, LogoutComponent]
})
export class AdminModule { }
