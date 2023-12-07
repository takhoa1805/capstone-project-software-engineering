function validate(input, rule){
    var err=rule.test(input.value);
    var errEle=input.parentElement.querySelector('.form-message');

    if (err) {
        errEle.innerText=err;
        input.classList.remove('valid');
        input.classList.add('invalid');
    }
    else {
        errEle.innerText='';
        input.classList.remove('invalid');
        input.classList.add('valid');
    }
}

function validOrNot(input, rule){
    var err=rule.test(input.value);
    return !err;
}

function Validator(formCheck){

    formCheck.rules.forEach(rule => { 
        var inp = document.getElementById(rule.selector);      
        inp.onblur = function() {
            validate(inp, rule);
        };
    });

    var formEle = document.getElementById(formCheck.form);
    if (formEle){
        formEle.onsubmit = function (e) {
            e.preventDefault();
            formCheck.rules.forEach(rule => { 
                var inp = document.getElementById(rule.selector);      
                    validate(inp, rule);
            });
            var flag=true;
            formCheck.rules.forEach(rule =>{
                var inp = document.getElementById(rule.selector);
                if (!validOrNot(inp, rule))
                    flag=false;
            })
            if (flag == true)
                formEle.submit();
            else
                flag=true;
        }
    }
    else {
        formEle.submit();
    };
}


Validator.isRequired = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            return value.trim() ? undefined : 'Vui lòng nhập trường này';
        },
    };
}

Validator.isEmail = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@hcmut\.edu\.vn$/;
            if (value == '') return 'Vui lòng nhập trường này';
            return regex.test(value) ? undefined : 'Vui lòng nhập lại email (@hcmut.edu.vn) của bạn';
        },
    };
}

Validator.isPassword = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{12,}$/;
            if (value == '')
                return 'Vui lòng nhập trường này';
            else if (value.length < 12)
                return 'Mật khẩu yêu cầu tối thiểu 12 ký tự';
            else
                return regex.test(value) ? undefined : 'Vui lòng đặt lại mật khẩu đầy đủ ký tự yêu cầu';
        },
    };
}

function passCheck(pass){
    var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{12,}$/;
    if (pass.length >= 12 && regex.test(pass))
        return true;
    else
        return false;
}

Validator.confirmPass = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            var tmp=document.getElementById('passSignUp').value;
            if (tmp == '')
                return 'Bạn chưa nhập mật khẩu';
            else if (!passCheck(tmp))
                return 'Mật khẩu được khởi tạo chưa chính xác';
            else if (value == '')
                return 'Vui lòng nhập trường này';
            else
                return (tmp === value) ? undefined : 'Nhập lại mật khẩu chưa chính xác,\n vui lòng nhập lại';
        },
    }
}