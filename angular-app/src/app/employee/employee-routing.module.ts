import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AddComponent } from './add/add.component';
import { DeleteComponent } from './delete/delete.component';
import { ModifyComponent } from './modify/modify.component';
import { ShowComponent } from './show/show.component';

import { EmpDataResolveService } from '../empdata-resolve.service';

const routes:Routes=[
    {path:'add', component:AddComponent},
    {path:'delete', component:DeleteComponent},
    {path:'modify', component:ModifyComponent},
    {path:'show', component:ShowComponent, resolve:{empData:EmpDataResolveService}}
];

@NgModule({
    imports:[RouterModule.forChild(routes)],
    exports:[RouterModule]
})

export class EmployeeRoutingModule { }
