# Robot arm control panel
I Built a User interface contains a control panel to control the robot arm, which has six range sliders of six motors, each motor has a motion from 0 to 180 degree. It also contains two buttons, the Save button to save the values of motors in the database, and a Run button which his job is to run the robot by sending 1 to the database and store it. Also, I created two PHP pages, One to return the last values of the motors entered by the user and another page to return the last value of the robot state either on or off.  <br></br>

**The control panel interface :**

<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123710152-e682bb80-d876-11eb-9ebf-cffd66ee75df.png">

The range slider motors are controlled it like this :

<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123711200-c05e1b00-d878-11eb-9a37-54a698030d68.gif">

**Here, when we press on the Save button its will store the values of the motor in the database :**


<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123712367-df5dac80-d87a-11eb-97af-82251135eb84.gif">



**Here, when we press on the Run button its will store "Number 1" in the database :**


<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123713125-68291800-d87c-11eb-9560-89f2f623f183.gif">

**Here, the first page of PHP which return from the database the last values of motors entered :**

<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123714271-a8899580-d87e-11eb-8a55-44a5576277c4.gif">


**Here, the second page of php returns from the database the last values of the robot state which is 1 that means the robot ON :**

<img width="700" alt="Control Panel" src="https://user-images.githubusercontent.com/43522153/123714535-2baaeb80-d87f-11eb-95ef-7baf4bc6e370.gif">






