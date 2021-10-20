import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  private API = 'https://back-dondemequedo.herokuapp.com/api';

  constructor(
    private http:HttpClient
    ) { }
  signup(data:Object):Observable<any>{
    return this.http.post(this.API+'/cliente/signup', data);  
  }
  login(data:Object):Observable<any>{
    return this.http.post(this.API+'/cliente/login', data);
  }
  updateClient(data:Object):Observable<any>{
    return this.http.post(this.API+'/cliente/update', data, { headers: this.getTokenHeader() });
  }
  getReservations():Observable<any>{
    return this.http.get(this.API+'/reservacion/history', { headers: this.getTokenHeader() });
  }
  search(text:string):Observable<any>{
    let params = new HttpParams();
    params = params.append('text', text);
    return this.http.get(this.API+'/habitacion/search', { params: params });
  }
  filter(data:Object):Observable<any>{
    return this.http.post(this.API+'/habitacion/filter', data);
  }
  getTokenHeader(){
    let token = localStorage.getItem('token');
    return new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${token}`
    });
  }
}
