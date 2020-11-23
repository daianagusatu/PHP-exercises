<!-- HTML form that asks the user for their name and prints it after submit 
    <form action = 'form.php' method = 'GET'>
    <input type = 'text' name = 'name'/>
    <input type = 'submit' name = 'submit' value = 'Submit' />
</form>

<?php
    if(isset($_GET['name']))
        echo 'Hello ' . $_GET['name'];
?> -->



<!--HTML form that asks the user for 2 numbers and multiplies them 
    <form action = 'form.php' method = 'GET'>
    <input type = 'text' name = 'num1' />
    <input type = 'text' name = 'num2' />
    <input type = 'submit' name = 'submit' value = 'Submit' />
</form>

<?php
    if(isset(($_GET['num1']), ($_GET['num2'])))
        echo $_GET['num1'] . ' x ' . $_GET['num2'] . ' = ' . $_GET['num1'] * $_GET['num2'];
?> -->

<!--HtML form, user chooses the operator to perform calculations 
    <form action = 'form.php' method = 'GET'>
    <input type = 'text' name = 'num1'/>
    <input type = 'text' name = 'operator'/>
    <input type = 'text' name = 'num2'/>
    <input type = 'submit' value = 'Submit' name = 'submit'/>
</form>

<?php
    if(isset($_GET['num1'], $_GET['num2'], $_GET['operator']))
    {
        if($_GET['operator'] == '+')
            echo $_GET['num1'] . ' + ' . $_GET['num2'] . ' = ' . $_GET['num1'] + $_GET['num2'];
        else if($_GET['operator'] == '-')
            echo $_GET['num1'] . ' - ' . $_GET['num2'] . ' = ' . $_GET['num1'] - $_GET['num2'];    
        else if($_GET['operator'] == '/')
            echo $_GET['num1'] . ' / ' . $_GET['num2'] . ' = ' . $_GET['num1'] / $_GET['num2']; 
        else if($_GET['operator'] == '*')
            echo $_GET['num1'] . ' * ' . $_GET['num2'] . ' = ' . $_GET['num1'] * $_GET['num2']; 
        else
            echo 'The symbol inserted is incorrect';
    }
?> -->

<form action = 'form.php' method = 'GET'>
    <input type = 'text' name='input'/>
    <input type = 'submit' value = 'Submit' name = 'submit'/>
</form>

<?php
    if(isset($_GET['input']))
    {
        $output = '';
        for($i = strlen($_GET['input']); $i >= 0 ; $i--)
        {
            $output .= substr($_GET['input'], $i, 1);
        }
        echo $output;
    }
?>