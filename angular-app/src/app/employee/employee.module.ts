import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { EmployeeRoutingModule } from './employee-routing.module';

import { AddComponent } from './add/add.component';
import { DeleteComponent } from './delete/delete.component';
import { ModifyComponent } from './modify/modify.component';
import { ShowComponent } from './show/show.component';

@NgModule({
    declarations: [AddComponent, DeleteComponent, ModifyComponent, ShowComponent],
    imports: [CommonModule, EmployeeRoutingModule, FormsModule, HttpClientModule],
    exports: [AddComponent, DeleteComponent, ModifyComponent, ShowComponent]
})
export class EmployeeModule { }
