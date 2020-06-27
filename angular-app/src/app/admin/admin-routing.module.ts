import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './login/login.component';
import { SignupComponent } from './signup/signup.component';
import { LogoutComponent } from './logout/logout.component';
import { MenuComponent } from './menu/menu.component';

const routes:Routes=[
    {path:'', component:LoginComponent},
    {path:'signup', component:SignupComponent},
    {path:'logout', component:LogoutComponent},
    {path:'menu', component:MenuComponent}
];

@NgModule({
    imports:[RouterModule.forChild(routes)],
    exports:[RouterModule]
})

export class AdminRoutingModule { }
