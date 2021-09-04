let form=document.querySelector('#btn');

form.addEventListener('click',(e)=>{
   
   e.preventDefault();
   let Id = document.querySelector('#id').value;
    
let url='http://localhost/Ems/employeeg.php';
let data={
    "id":Id,
    
};
    
let params=JSON.stringify(data);
let xhr=new XMLHttpRequest();
 xhr.open('GET',url,true);
  xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
   xhr.onload=()=>{
    if(xhr.status==200||xhr.readyState==4)
        {
            console.log('employee got');
        }
        else
     {
            console.log('error occured');

       }


    }
    xhr.send(params);
});
