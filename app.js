function validateForm(){
//Name validations 

    var name = document.myForm.name.value;
    var name1 = document.myForm.name1.value;

    if(name == ""){
        document.getElementById('name_error').innerHTML="This field is required";
        return false;
    }
    
    if(name1 == ""){
        document.getElementById('name_error').innerHTML="This field is required";
        return false;
    }



    
    // Email validations
    var a = document.myForm.email.value;

    if(a == ""){
        document.getElementById('Email_error').innerHTML="This field is required";
        return false;
    }

  else if(a.indexOf('@')==0){
        document.getElementById('Email_error').innerHTML="Invalid email address";
        return false;
    }

   else if( (a.charAt(a.length-4)!='.') &&  (a.charAt(a.length-3)!='.')){
        document.getElementById('Email_error').innerHTML="Invalid email address";
        return false;
        
    }


    //Phone Number Verification
    var phone = document.myForm.Phone.value;

     if(phone ==""){
        document.getElementById('Phone_error').innerHTML="This field is required";
        return false;
    }

    else if(isNaN(phone)){
        document.getElementById('Phone_error').innerHTML="Only Numbers are allowed";
        return false;
    }

   else if(phone.length !=10){
        document.getElementById('Phone_error').innerHTML="Invalid Count";
        return false;
    }

    else if(( phone.charAt(0)!=9 &&  phone.charAt(0)!=8 &&   phone.charAt(0)!=7) ){
        document.getElementById('Phone_error').innerHTML="Invalid Phone Number";
        return false;
    }

    //Radio check 
    var radio1 = document.getElementById('exampleRadios1').checked;
    var radio2 = document.getElementById('exampleRadios2').checked;
    if((radio1 == "") && (radio2 == "") ){
        document.getElementById('radio_error').innerHTML="please select a category";
        return false;
    }

    //CHECKBOX
    var checkbox = document.getElementById('gridCheck').checked;
    

    var row = 1;

    if(row == 1){

      document.getElementById('table_header').innerHTML="Registration Details"  
    }

    var now = new Date();
    
    


    var city  = document.myForm.city.value;
    var state  = document.myForm.state.value;
   

    var display = document.getElementById('table');
    

    var newRow = display.insertRow(row);

    var cell0 = newRow.insertCell(0);
    var cell1 = newRow.insertCell(1);
    var cell2 = newRow.insertCell(2);
    var cell3 = newRow.insertCell(3);
    var cell4 = newRow.insertCell(4);
    var cell5 = newRow.insertCell(5);
    var cell6 = newRow.insertCell(6);
    var cell7 = newRow.insertCell(7);
    var cell8 = newRow.insertCell(8);

    cell0.innerHTML=name;
    cell1.innerHTML=name1;
    cell2.innerHTML=a;
    cell3.innerHTML=phone;
    cell4.innerHTML=city;
    cell5.innerHTML=state;
    if(radio1 != ""){
        cell6.innerHTML="STUDENT";
    }
    else{
        cell6.innerHTML="PROFESSIONAL";
    }

    if(checkbox){
        cell7.innerHTML="Provided";
    }
    else{
        cell7.innerHTML="Not Provided";
    }

    cell8.innerHTML=now;
        
    

    row++;


}
