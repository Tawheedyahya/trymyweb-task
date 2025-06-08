$(document).ready(function () {
  $("#productform").submit(function (event) {
    event.preventDefault();
    let catagoryname = $("#catagoryname").val();
    // console.log(catagoryname);
    let productname = $("#productname").val();
    let price = $("#price").val();
    let marketprice = $("#marketprice").val();
    let description = $("#description").val();
    let img = $("#img")[0].files[0];

    let formdata = new FormData();
    formdata.append("catagoryname", catagoryname);  
    formdata.append("productname", productname);
    formdata.append("price", price);
    formdata.append("marketprice", marketprice);
    formdata.append("description", description);
    formdata.append("img", img);

    $.ajax({
      method: "POST",  
      url: "http://localhost/inter_task/views/products/productsubmit.php",
      data: formdata,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
        console.log(response)
        if(response.status){
            location.assign('../dashboard.php')
            exit;
        }
        else{
            alert('must fill all the details in correct manner');
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
});
