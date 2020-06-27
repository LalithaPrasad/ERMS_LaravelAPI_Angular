import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Router, Resolve } from '@angular/router';
import { Observable, throwError } from 'rxjs';
import { catchError, map } from 'rxjs/operators';
import { TokenService } from './token.service'

@Injectable({
    providedIn: 'root'
})
export class EmpDataResolveService implements Resolve<any> {

    constructor(
        private httpclient:HttpClient,
        private router:Router,
        private tokenservice:TokenService
    ) { }
    handleError(error:HttpErrorResponse){
        let errorMessage='Unknown error';
        if(error.error instanceof ErrorEvent){
            errorMessage=`Error:${error.error.message}`;
        }
        else{
            errorMessage=`Error code:${error.status}\nMessage:${error.message}`;
        }
        alert(errorMessage);
        return throwError(errorMessage);
    }
    resolve(): Observable<any> {
        if(this.tokenservice.get()=='undefined'){
            alert('Invalid user');
            this.router.navigateByUrl('/admin');
        }
        else{
            let url='http://localhost:8000/api/employee/display';
            let headers=new HttpHeaders().set('Content-type','application/json').set('token',this.tokenservice.get());
            return this.httpclient.get(url,{headers:headers}).pipe(
                map((dataFromApi)=>dataFromApi),
                catchError(this.handleError));
        }
    }
}
