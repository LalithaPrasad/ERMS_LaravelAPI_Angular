import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Component({
    selector: 'app-signup',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {
    username:string;
    password:string;
    password1:string;

    constructor(
        private httpclient:HttpClient,
        private router:Router
    ) { }
    ngOnInit(): void { }
    signup(){
        if(this.password!=this.password1){alert('Passwords dont match');}
        else{
            const url='http://localhost:8000/api/admin/signup';
            const data={'username':this.username, 'password':this.password};
            this.httpclient.post(url,data).subscribe(response=>{
                if(response['message']=='AdminCreated'){
                    alert('Admin created');
                    this.router.navigateByUrl('/admin');
                }
                else{
                    alert(response['message']);
                    this.router.navigateByUrl('/admin/signup');
                }
            });
        }
    }
}
