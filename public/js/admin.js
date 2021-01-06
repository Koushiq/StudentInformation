$(document).ready(function(){
    getAllStudents();
    $("#mClose").click(function(){
        $("#mErrLog").html('');
    });
});


getAllStudents = function(){
    $.ajax({
        url:"http://localhost:8000/admin/home/getAllStudents",
        method:"GET",
        success:function(data){
            let students = JSON.parse(data);
            console.log(students);
            let str= "";
            for(let i=0;i<students.length;i++)
            {
               str+=`<tr>`;
               str+=`<td>`+students[i].name+`</td>`;
               str+=`<td>`+students[i].firstname+`</td>`;
               str+=`<td>`+students[i].lastname+`</td>`;
               str+=`<td>`+students[i].address+`</td>`;
               str+=`<td>`+students[i].picpath+`</td>`;
               str+=`<td>`+students[i].department+`</td>`;
               str+=`<td>`+students[i].dob+`</td>`;
               str+=`<td>`+`<button class="edit btn btn-sm btn-danger"  data-toggle="modal" data-target="#editModal" id="`+students[i].id+`">Edit</button>  `;
               str+=`<button class="delete btn btn-sm btn-success" id="`+students[i].id+`">Delete</button>`;
            }
           
            $("#table").append(str);

            $(".edit").click(function(){
               //
              
               let studentId= this.id;
               $("form").submit(function(e){
                    $("#mErrLog").html('');
                    e.preventDefault();
                    let User = {
                        firstname:$("#mFirstname").val(),
                        lastname:$("#mLastname").val(),
                        address:$("#mAddress").val(),
                        picture:$("#mPicture").val(),
                        department:$("#mDepartment").val(),
                        dateofbirth:$("#mDob").val()
                    }
                    let res = validate(User);
                    if(Object.keys(res).length==0)
                    {
                        $.ajax({
                            url:"http://localhost:8000/admin/home/updateStudent",
                            method:"PUT",
                            data:{
                                "id":studentId,
                                "firstname":User.firstname,
                                "lastname":User.lastname,
                                "address":User.address,
                                "picture"
                            }
                        })
                    }
                    else
                    {
                        let str = "";
                        for (let key in User) {
                            if(res[key+"Err"]!=undefined)
                            {
                                str += res[key+"Err"]+"<br>";
                            }
                            
                        }
                        $("#mErrLog").html(str);
                    }

               });
            });

            $(".delete").click(function(){
               
            });


        },
        error:function()
        {
           alert('here');
        }
    });
}

function validate(User)
{
    let errorLog =  {};
    for (let key in User) {
        
        if(User[key]=="" || User[key]==undefined)
        {
            errorLog[key+"Err"]=key+" can not be empty";
        }

      }
      return errorLog;
}
