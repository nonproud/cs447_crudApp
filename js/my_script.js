
funciton checkdelete(name){
	if(confirm("Are you sure to remove " + name + " from storage?")){
		document.delete_form.submit();
	}else{
		alert("Delete was cancled.");
	}
}

funciton clearForm(form_id){
	alert('Use!');
	var form = document.getElementById(form_id);
	form.reset();
}