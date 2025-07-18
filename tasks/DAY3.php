<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <style>
        body{
            background-color: orange;
        }
    </style>
     <div class="container mt-5 bg-dark  ">
        <div class="row justifiy-content-center d-flex mt-5">
          <form class="was-validated text-end">
            <div class="row justifiy-content-center d-flex mt-5">
           
            <div class="  mt-3 col-md-6">
             <label for="validationServerUsername" class="form-label text-light">البريد الالكتروني</label>
            <input type="email" class="form-control     " id="validationServerUsername" required>
            <div class="invalid-feedback">
              Please enter a email
            </div>
            </div>
             <div class="  mt-3 col-md-6">
            <label for="validationServerUsername" class="form-label text-light">  الاسم الكامل</label>
            <input type="text" class="form-control     " id="validationServerUsername" required>
            <div class="invalid-feedback">
             Please enter a name
            </div>
             </div>
             <div class="  col-md-4">
             <label for="validationServerUsername" class="form-label text-light">العمر</label>
            <input type="number" class="form-control    " id="validationServerUsername" required>
            <div class="invalid-feedback">
             Please enter a email age
            </div>
            </div>

              <div class="   col-md-4">
              <label for="validationServer04" class="form-label text-light">الجنس</label>
              <select class="form-select    " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected disabled value="">Choose...</option>
              <option value="0">ذكر</option>
              <option value="1">انثى</option>
              </select>
              <div id="validationServer04Feedback" class="invalid-feedback">
               Please select a  Gender.
              </div>
              </div>
              <div class="  col-md-4">
             <label for="validationServerUsername" class="form-label text-light">الدرجه</label>
            <input type="number" class="form-control     " id="validationServerUsername " required>
            <div class="invalid-feedback">
             Please enter a degree
            </div>
            </div>
              <div class="mb-3">
              <label for="validationTextarea" class="form-label text-light">الملاحظات</label>
              <textarea class="form-control" id="validationTextarea"  required></textarea>
              <div class="invalid-feedback">
              اكتب رايك هنا
             </div>
             </div>

            
            <div class="  col-md-6">
            <button type="button" class="btn btn-primary btn-success w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> عرض الطلاب</button>             
             </div>
            <div class="  col-md-6">
            <button type="submit" class="btn btn-primary btn-success w-100" > ارسال البيانات</button>             
             </div> 
             </div>

          </form>

        </div>
    </div>

 

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text_end" id="staticBackdropLabel">قائمه الطلاب</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container py-5">
    <div class="row d-flex justify-content-center ">
        <h1 class="text-Light d-flex justify-content-center">sample data table</h1>
        <table class="table table-striped table-hover ">
            <tr class="r  col-md-6">
                
                <th class="bg-dark text-light text_center">التقدير</th>
                <th class="bg-dark text-light text_center">الدرجه</th>
                <th class="bg-dark text-light text_center"">الاسم</th>
            </tr>
            <tr>
                
                <td class="text_center">امتياز</td>
                <td class="text_center">90</td>
                <td class="text_center">احمد علي</td>
            </tr>
            <tr>
                
                <td class="text_center">جيد</td>
                <td class="text_center">72</td>
                <td class="text_center">منى سمير</td>
            </tr>
            <tr>
                
                <td class="text_center">راسب</td>
                <td class="text_center">45</td>
                <td class="text_center">كريم فؤاد</td>
                
            </tr>

  
         </table>

    </div>
    </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
      
   
</body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>