<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZ UNIX Beginner Tutorial</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>

<body>
    <?php include "navigation.php"; ?>

    <div class="main_wrapper">
        <div class="hero_section">
            <div class="hero_text">
                <h1>EZ UNIX Beginner Tutorial</h1>
            </div>
        </div>

        <div class="intro_text">
            <p>
                Welcome to the Beginner EZ UNIX Tutorial!  This tool is designed for users who have no experience with command line file manipulation but can also be a great refresher to those that have not used it in a while. 
            </p>
            <p>
                In this course we will go over basic actions that can be taken in UNIX, from navigating file structures to creating new folders.  Let’s begin.
            </p>
        </div>

        <div class="tutorial_content">
            <div class="section_header">
              <h2>Getting Started</h2>
            </div>
            <p>
                The first step to using UNIX is to find and log into your computer’s command line interface, or shell. 
            </p>
            <p>
                <span class="os">On Mac</span> you can click the magnifying glass in the top right and search for “terminal”.  Alternatively, the terminal app can usually be found in the LaunchPad in the collection of applications labeled “other”.
            </p>
            <p>
                <span class="os">On Windows</span> you can open a command prompt window by accessing the Start menu and searching “cmd”.
            </p>
            <p>
                Once the terminal is open you should see a screen that looks similar to this:
            </p>
            <img src="assets/media/ex_1.png" alt="Screenshot of Command Line"/>
            <p>
                **Note: The exact text you see will differ from those in this tutorial as this represents the folder structure of your individual computer.
            </p>
            <hr>
            <div class="section_header">
              <h2>pwd Command</h2>
            </div>
            <p>
                The first things we can do are look at where we are and look at where we can go.  Let’s orient ourselves and take a look at where we are.  Type “pwd” and hit enter:
            </p>
            <img src="assets/media/ex_2.png" alt="Screenshot of Command Line"/>
            <p>
                “pwd” stands for “print working directory” and will output the full pathname of the directory, or folder that we are currently in.  
            </p>
            <hr>
            <div class="section_header">
              <h2>ls Command</h2>
            </div>
            <p>
                Now try typing “ls” and hitting enter:
            </p>
            <img src="assets/media/ex_3.png" alt="Screenshot of Command Line"/>
            <p>
                The command “ls”, which is short for “list”, will show all of the files and file directories directly contained in the current directory.  “ls” also allows for additional arguments to be passed in with it, such as “-l” and “-a”.  Typing “ls -l” will show the same directories but with some additional information, try that now:
            </p>
            <img src="assets/media/ex_4.png" alt="Screenshot of Command Line"/>
            <p>
                Using the argument “-l” with the “ls” command shows the same files and directories as using “ls” on its own, but with much more information about those files and directories.  The “-l” argument shows the file type, see “d” for directory and “-” for file.  The next nine characters are the permissions the file has, we’ll get into that later. It also shows the owner of the file, the group, the number of links, and the last time the file was modified.
            </p>
            <p>
                Now let’s try the other argument.  Type “ls -a”:
            </p>
            <img src="assets/media/ex_5.png" alt="Screenshot of Command Line"/>
            <p>
                Using the argument “-a” shows all files in your current directory, even ones that might be normally hidden from you.  Be careful interacting with these files, they are generally hidden for a reason. 
            </p>
            <hr>
            <div class="section_header">
              <h2>Navigation and Directory Creation</h2>
            </div>
            <p>
                Now that we know where we are and where we can go, let’s actually move around.  To change from one directory to another you will use the “cd” command followed by the name of the directory you want to move to, entered as an argument.  Try entering “cd documents”:
            </p>
            <img src="assets/media/ex_6.png" alt="Screenshot of Command Line"/>
            <p>
                Notice that the pathname to the left has updated, you are now in the documents directory.  Use “pwd” and “ls” to check out the documents directory.
            </p>
            <p>
                Next, we will make a new directory inside the documents directory.  To do this, use the command “mkdir” with the argument being the name you would like to use for the new directory.  Let’s make a UNIX directory, type “mkdir UNIX”:
            </p>
            <img src="assets/media/ex_7.png" alt="Screenshot of Command Line"/>
            <p>
                Did anything even happen?  It may not look like it at first glance, but let’s take a look.  Use “ls” to examine the contents of the documents directory and you will see the new UNIX directory.  Change to the UNIX directory.
            </p>
            <p>
                Now that we are multiple levels deep into our directories how do we go back?  Trying to change directories back to “documents” with “cd documents” will result in an error as there is not a “documents” directory inside of our UNIX directory.
            </p>
            <p>
                Instead, if you try “cd ..” you will be taken back up one level of directory. Try that now:
            </p>
            <img src="assets/media/ex_8.png" alt="Screenshot of Command Line"/>
            <p>
                Notice that the path now ends at documents as that is our current directory.  Use “cd ..” to go back up to where we started.
            </p>
            <p>
                Suppose you know that you want to go to your UNIX directory, do you have to enter “cd documents” then “cd UNIX”? No! You can combine these steps by entering “cd documents/UNIX”, try that now:
            </p>
            <img src="assets/media/ex_9.png" alt="Screenshot of Command Line"/>
            <p>
                This same concept can be used to change directories as far as you want, as long as you know the structure and file path needed to get there.  This also works in reverse, entering “cd ../..”, for example, will take you up two levels in your file structure.
            </p>
            <hr>
            <div class="section_header">
              <h2>Basic File Creation and Manipulation</h2>
            </div>
            <p>
                There are several ways to create files in UNIX including using text editors such as vim, but for now let’s try using the “touch” command.  Using “touch” with the argument as the name of the file you want to manipulate can do a couple things.  Firstly, if the file does not exist already, it will create the file.  If the file already existed, “touch” will cause UNIX to update the last time the file was modified.  From our UNIX directory let’s create a new file called hello.txt.  Enter “touch hello.txt” and then check that the file was created using the list command:
            </p>
            <img src="assets/media/ex_10.png" alt="Screenshot of Command Line"/>
            <p>
                Congratulations, you have just created a brand-new plain text file called “hello”.  Now let’s explore what we can do with files that are in our directories.  
            </p>
            <p>
                The “cp” command allows you to create a copy of a file, using the syntax “cp filename copyfilename”.  Let’s try this with our hello.txt file and copy it into a new file called hi.txt.  Enter “cp hello.txt hi.txt” then use the list command to check your work:
            </p>
            <img src="assets/media/ex_11.png" alt="Screenshot of Command Line"/>
            <p>
                See that there are now two files in the UNIX directory, the original hello.txt and the new hi.txt.  
            </p>
            <p>
                The “mv” command can be used to move a file to a new directory or to rename it.  Let’s rename the hi.txt file.  Enter “mv hi.txt hey.txt” and then use the list command to check that it worked:
            </p>
            <img src="assets/media/ex_12.png" alt="Screenshot of Command Line"/>
            <p>
                Now that we have renamed the file let’s move it.  Moving a file utilizes the same “mv'' command but instead of a new name in the second argument you will enter the filepath for where you want to place the file, ending with the file’s name.  Enter “mv hey.txt ../hey.txt” to move the hey.txt file into the “documents'' directory:
            </p>
            <img src="assets/media/ex_13.png" alt="Screenshot of Command Line"/>
            <p>
                Now return to the “documents” directory and check the contents of it to find our hey.txt file:
            </p>
            <img src="assets/media/ex_14.png" alt="Screenshot of Command Line"/>
            <p>
                Now create a new directory called “UNIX_examples” but then change your directory to our already existing “UNIX” directory.  From the UNIX directory create another copy of the hello.txt file and name it example.txt.
            </p>
            <p>
                Now suppose you want to move the example.txt file into the “UNIX_examples” directory.  You can do this by using a single “mv” command.  Enter “mv example.txt ../UNIX_examples/example.txt”.  Do that now:
            </p>
            <img src="assets/media/ex_15.png" alt="Screenshot of Command Line"/>
            <p>
                Navigate directly to the “UNIX_examples” directory by entering “cd ../UNIX_examples” and use the list command to check that the example.txt file made it to the appropriate directory:
            </p>
            <img src="assets/media/ex_16.png" alt="Screenshot of Command Line"/>
            <hr>
        </div>
        <div class="congrats">
            <p>
                    Congratulations!! You have completed the beginner tutorial for EZ UNIX!
            </p>
        </div>
    </div>

</body>
</html>