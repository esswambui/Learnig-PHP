function validateForm() {
    let pwd = document.forms["reg-form"]["pwd"].value;
    let confirmPwd = document.forms["reg-form"]["confirm-pwd"].value;
    if (pwd !== confirmPwd) {
      alert("Passwords do not match!");
      return false;
    }
  }