Program Usage Instructions

Requirements
    Make sure you have PHP 7.1 or later installed on your system.
    Ensure you have PHPUnit installed if you want to run tests.

Program Files
    Make sure you have the following program files in your project directory:
        program.php: The main program file for interacting with dogs.
        Dog.php: Contains the base Dog class and its methods.
        Other dog-specific files like ShibaInu.php, Pug.php, etc., if applicable.
        tests/ directory with test files if you intend to run tests.

Command Line Usage
    Open your command line terminal.

View Available Commands
    To see the available commands, open a terminal and navigate to your project directory.
    Run the program with the following command:

    php program.php

Interacting with Dogs

You can interact with different types of dogs by specifying the dog type and action.
The available dog types are: 
    
    shibainu, pug, dachshund, plushlabrador, rubberdachshund.

Example Commands

To make a dog bark, use the following command:

    php program.php shibainu sound

To check if a dog can hunt, use the following command:

    php program.php pug hunt

Running Tests (Optional)

If you have PHPUnit installed and want to run tests, navigate to your project directory in the terminal.
Run the tests with the following command:

        vendor/bin/phpunit tests

        
That's it! You can now use the program to interact with different types of dogs and, if needed, run tests to verify the functionality of the dog classes.
