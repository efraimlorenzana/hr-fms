// Index
getRecords = (e, emp_id, file_id) => {
	let links = document.querySelectorAll('.subNavLink');

	let buffer = `<div class="loading">Loading . . .</div>`;
	$('.employee__content--result').html(buffer);

	links.forEach(link => {
		link.classList.remove('tab-active');
	});

	e.target.classList.add('tab-active');
	
	$.get(`/Employee/File/Records`, {emp_id, file_id}, data => {
		$('.employee__content--result').html(data);
	});
}

// Add new Employee
previewImage = (e) => {
	let image = document.querySelector('#preview');
	const reader = new FileReader();

	reader.onload = (e) => {
		image.src = reader.result;
		image.parentElement.hidden = false;
	}
	reader.readAsDataURL(e.target.files[0]);

	// console.log(reader);
}