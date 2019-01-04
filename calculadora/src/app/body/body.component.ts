import { Component, OnInit } from '@angular/core';
import { Http } from '@angular/http';
@Component({
  selector: 'app-body',
  templateUrl: './body.component.html',
  styleUrls: ['./body.component.css']
})
export class BodyComponent implements OnInit {

  constructor(private http: Http) {

  }

  ngOnInit() {
  }

  getFecha()
{
  this.http.get ('http://localhost:8000')
  .toPromise()
  .then(response => {
    if(JSON.stringify(response.json()) === '[1]')
    {console.log(response);
    return;}
      console.log(response);
  }).catch(error =>{
    console.log(error);
  });




}


}
