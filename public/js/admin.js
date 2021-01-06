$(document).ready(function(){

  

    getAllStudents();
   
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



