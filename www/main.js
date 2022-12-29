
// ví dụ sử dụng jquery
$(document).ready(() => {
    $("#test").on("click", () => {
		$("h3").html("jQuery đã hoạt động");
	});
    
	$("#fileToUpload").on("change", function(){
        let namefile= $(this).val();
        console.log(namefile);
        let name = namefile.split("\\")
        $("#nameFile").text(name[name.length-1]) ;
        console.log($("#nameFile").text())
    });
});

