const openCloseBtn = document.querySelector('#bluetooth');
openCloseBtn.addEventListener('change', function(e) {

    if(e.target.checked) {
        fetch('/admin/setting/time?waktu=' + 0).then(res => res.json()).then(data => {
            if(data.status == 'success') {
                alert('Success open registration');
            }
        }).catch(err => console.log(err));
    } else {
        fetch('/admin/setting/time?waktu=' + 1).then(res => res.json()).then(data => {
            if(data.status == 'success') {
                alert('Success close registration');
            }
        }).catch(err => console.log(err));
    }
});