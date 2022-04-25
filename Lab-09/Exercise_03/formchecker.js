//Checks if the form is is valid or not
function checkForm()
{
    //Next, check if username is valid
    //If user name is not valid
    if(checkUserName()  == false)
    {
        //Alert the user
        alert("Invalid Username");

        //Don't submit
        event.preventDefault();
    }
    //Otherwise, if the password is invalid
    else if(checkPassword() == false)
    {
        //Alert the user
        alert("Invalid Password");

         //Don't submit
        event.preventDefault();   
    }
    //Otherwise, if any item is negative
    else if(checkItems() == false)
    {
        //Alert the user
        alert("Not all items are positive");

        //Don't submit
        event.preventDefault();  
    }
    //Otherwise, if not shipping choice is made
    else if(checkShipping() == false)
    {
        //Alert the user
        alert("No shipping choice is made");

        //Don't submit
        event.preventDefault();  
    }

    //Otherwise, the form is valid
}

//Checks the username
function checkUserName()
{
    //Get the value of the user name
    let username = window.document.querySelector("#username").value;

    //Checks if the username is not empty, if the username is empty
    if(username.length == 0)
    {
        //Then the form is not valid, return false
        return false;
    }
    //Otherwise, if username is not a email
    else if(!checkEmail(username))
    {
        //Then the form is not valid, return false
        return false;
    }
    //Otherwise, the username is valid, 
    else
    {
        //Return true
        return true;
    }
}

//Checks if the username is an email
function checkEmail(username)
{
    //Create a variable that will keep track of what character
    //the function is looking for
    let letter = '@';

    //Start the index to be i
    let i = 0;

    //Check the first character to see if @ or . is at the start of the email
    //If the condition is met, then username is invalid
    if(username.charAt(0) == '@' || username.charAt(0) == '.')
    {
        //Return false
        return false;
    }

    //Next, go through each character of username, starting at index i
    while(letter == '@')
    {
        //Next, check if the character at ith index is @
        //If it does, end the while loop
        if(username.charAt(i) == letter)
        {
            //Set letter to be .
            letter = '.';
        }

        //Increate i by 1
        i++;

        //If i is equal to username.length, then username is invalid
        if(i == username.length)
        {
            //Return false
            return false;
        }
    }

    //Next, check if the character at index is not .
    //If the condition is false, then username is invald
    if(username.charAt(i) == letter) return false;

    //Next, loop until the function finds a . in the username
    while(letter == '.')
    {
        //If the character at index i is ., end the while loop
        if(username.charAt(i) == letter) letter ='a';

        //Increase i by 1
        i++;

        //If is eqaul to the username.length, then username is invalid
        if(i == username.length) return false;
    }

    //Next, check if the substring from index i to the end the string
    //If the substring com, then return true, otherwise false
    if(username.substring(i, username.length) == "com") return true;
    else return false;
}

//Checks the password
function checkPassword()
{
    //Get the value of the password
    let password = window.document.querySelector("#password").value;

    //Checks if the password is not empty
    //If the password is empty, then the form is not valid
    if(password.length == 0)
    {
        //Return false
        return false;
    }
    //Otherwise, password is valid, return true
    else
    {
        //Return true;
        return true;
    }
}

//Check items inputs
function checkItems()
{
    //Get the value for each item
    let item1 = window.document.querySelector("#item1").value;
    let item2 = window.document.querySelector("#item2").value;
    let item3 = window.document.querySelector("#item3").value;

    //If item1, item2, or item3 are less than 0, then the form is not valid
    if(item1 < 0 || item2 < 0 || item3 < 0)
    {
        //Return false
        return false;
    }
    //Otherwise, the number of items are valid
    else
    {
        //Return true
        return true;
    }
}

//Check all the shipping inputs
function checkShipping()
{
    //Get the checked value of each radio option
    //checked is either True or False depending on whether the button
    //If checked or not
    let shipping1 = window.document.querySelector("#shipping1").checked;
    let shipping2 = window.document.querySelector("#shipping2").checked;
    let shipping3 = window.document.querySelector("#shipping3").checked;

    //If either shipping1, shipping2, or shipping3 is checked, then the form is valid
    if(shipping1 || shipping2 || shipping3)
    {
        //Return true
        return true;
    }
    //Otherwise, then the form is not valid
    else
    {
        //Return false
        return false;
    }
}

//Function reset all inputs
function reset()
{
    //Get all the inputs and reset their values
    window.document.querySelector("#username").value = "";
    window.document.querySelector("#password").value = "";
    window.document.querySelector("#item1").value = 0;
    window.document.querySelector("#item2").value = 0;
    window.document.querySelector("#item3").value = 0;
    window.document.querySelector("#shipping1").checked = false;
    window.document.querySelector("#shipping2").checked = false;
    window.document.querySelector("#shipping3").checked = false;
}