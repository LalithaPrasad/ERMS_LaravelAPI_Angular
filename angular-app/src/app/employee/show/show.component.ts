import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router'
import { TokenService } from '../../token.service';

@Component({
    selector: 'app-employee-show',
    templateUrl: './show.component.html',
    styleUrls: ['./show.component.css']
})
export class ShowComponent implements OnInit {

    employees:any;
    response:any;

    constructor(private route:ActivatedRoute){ }
    ngOnInit(): void {
        this.response=this.route.snapshot.data['empData'];
        if(this.response.message=='NotEmpty'){
            this.employees=this.response.employees;
        }
        else{
            this.employees=null;
        }
    }
}
