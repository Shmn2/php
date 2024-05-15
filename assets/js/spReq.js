function sp() {
    const form = document.getElementById('newsp');
    const error_role = document.getElementById('error_role');
    const error_name = document.getElementById('error_name');
    const error_bio = document.getElementById('error_bio');

    form.addEventListener('submit', (e) => {

        error_role.innerHTML = "";
        error_name.innerHTML = "";
        error_bio.innerHTML = "";

        let role = document.getElementById('role').value;
        let name = document.getElementById('name').value;
        let bio = document.getElementById('bio').value;

        if (role === '' || role == null) {
            e.preventDefault();
            error_role.innerHTML = "SP role should not be null";
        } 
        if (name === '' || name == null) {
            e.preventDefault();
            error_name.innerHTML = "SP name should not be null";
        } 
        if (bio === '' || bio == null) {
            e.preventDefault();
            error_bio.innerHTML = "SP bio should not be null";
        } 
    });
}
