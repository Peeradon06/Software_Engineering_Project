*** Settings ***
Library    SeleniumLibrary

*** Variables *** 
${SERVER}       http://10.199.66.227/SoftEn2020/Sec02/SEP/index.php
${ADDPAGE}      http://10.199.66.227/SoftEn2020/Sec02/SEP/addlistForm.php
${BROWSER}      Chrome
${ADDBUTTON}    xpath://*[@id="Add"]
${ID}        PID
${PNAME}     PNAME
${PTYPE}     PTYPE
${DETAIL}    SPEC
${LOC}       LOC
${STATUS}    PSTATUS
${BORDATE}   BDATE
${REDATE}    RDATE
${STAFF}     STAFF
${SUBMIT}    btn

*** Test case ***
Open Browser
    #Set Selenium Speed    0.3
    Open Browser    ${SERVER}    ${BROWSER}
    Location Should Be    ${SERVER}

# Adding Success

Valid Available
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000400
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Available
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Page Should Contain    5602100000400

Valid Unavailable
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000410
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Unavailable
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Page Should Contain    5602100000410

Valid OverDue
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000411
	Input Text    ${PNAME}    โปรแกรมวิเคราะห์ข้อมูลสารสนเทศภูมิศาสตร์เชิงพื้นที่    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์การศึกษา
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    นายพีรดนย์ สุขเกษม 088-5809619
    Select From List By Value    ${STATUS}    Overdue
    Input Text    ${BORDATE}    02/02/2020
    Input Text    ${REDATE}    29/02/2020
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Page Should Contain    5602100000411

Valid Repair
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000412
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Repairing   
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Page Should Contain    5602100000412

Valid Borrowed
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000413
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    02/02/2020
    Input Text    ${REDATE}    29/02/2020
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Page Should Contain    5602100000413

Empty BDate    
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000406
	Input Text    ${PNAME}    คอมพิวเตอร์สมรรถนะสูงสำหรับทำงานด้านวิจัยในวิชาโครงงานศึกษา
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${REDATE}    03/02/2020
    Input Text    ${STAFF}    -
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Location Should Be    ${SERVER}
    Page Should Contain    5602100000406

Empty RDate    
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000407
	Input Text    ${PNAME}    คอมพิวเตอร์สมรรถนะสูงสำหรับทำงานด้านวิจัยในวิชาโครงงานศึกษา
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    03/03/2020
    Input Text    ${STAFF}    Thanapon 
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Adding Successful
    Location Should Be    ${SERVER}
    Page Should Contain    5602100000407
    Close Browser

# Adding Fail

Empty ID
    Open Browser    ${SERVER}    ${BROWSER}
    Click Element    ${ADDBUTTON}
	Input Text    ${PNAME}    คอมพิวเตอร์สมรรถนะสูงสำหรับทำงานด้านวิจัยในวิชาโครงงานศึกษา
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    Dell Optiplex 7010 DT	
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Unavailable
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter equipment id
    Location Should Be    ${ADDPAGE}

Repeated ID
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5602100000400
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Available
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    This Id is already exits. Please enter another Id
    Location Should Be    ${ADDPAGE}

Invalid ID
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    59021000&&_#$###%^
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Available
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Name should not contain special symbols
    Location Should Be    ${ADDPAGE}

Short ID
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON}
    Input Text    ${ID}    5902100
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์    
	Select From List By Value    ${PTYPE}        ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Available
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Name should not contain special symbols
    Location Should Be    ${ADDPAGE}

Empty Name    
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000401
	Select From List By Value    ${PTYPE}    ครุภัณฑ์สำนักงาน
    Input Text    ${DETAIL}    Cisco
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Repairing
    Input Text    ${STAFF}    -
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter equipment name
    Location Should Be    ${ADDPAGE}

Empty Type    
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000402
	Input Text    ${PNAME}    เครื่องทำลายเอกสาร	
    Input Text    ${DETAIL}    IDEAL 3104
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Unavailable   
    Input Text    ${STAFF}    -
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please select equipment type
    Location Should Be    ${ADDPAGE}

Empty Description
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000403
	Input Text    ${PNAME}    คอมพิวเตอร์สมรรถนะสูงสำหรับงานวิจัยด้าน IT
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${LOC}    -
    Select From List By Value    ${STATUS}    Repairing
    Input Text    ${STAFF}    -
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter equipment description
    Location Should Be    ${ADDPAGE}

Empty Location 
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000404
	Input Text    ${PNAME}    ชุดอุปกรณ์สำหรับทำงานด้านวิจัยในวิชาโครงานศึกษา
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Select From List By Value    ${STATUS}    Available    
    Input Text    ${STAFF}    -
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter location of the equipment
    Location Should Be    ${ADDPAGE}

Empty Status    
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000405
	Input Text    ${PNAME}    ชุดอุปกรณ์สำหรับทำงานด้านวิจัยในวิชาโครงานศึกษา
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    -
    Input Text    ${BORDATE}    20/02/2020
    Input Text    ${REDATE}    03/03/2020
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please select equipment status
    Location Should Be    ${ADDPAGE}

Invalid Borrow Date #1
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000413
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    232/22/2999
    Input Text    ${REDATE}    29/02/2020
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Please enter a valid borrowing date ( ex. 02/02/2020 )
    Location Should Be    ${ADDPAGE}

Invalid Borrow Date #2
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000413
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    sadss_$#!$!@%
    Input Text    ${REDATE}    29/02/2020
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Please enter a valid borrowing date ( ex. 02/02/2020 )
    Location Should Be    ${ADDPAGE}

Invalid Return Date #1
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000413
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    29/02/2020
    Input Text    ${REDATE}    232/22/2999
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Please enter a valid due date ( ex. 02/02/2020 )
    Location Should Be    ${ADDPAGE}

Invalid Return Date #2
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000413
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Borrowed
    Input Text    ${BORDATE}    29/02/2020
    Input Text    ${REDATE}    sadss_$#!$!@%
    Input Text    ${STAFF}    Thanapon
	Click Button    ${SUBMIT}    
	Page Should Contain    Please enter a valid due date ( ex. 02/02/2020 )
    Location Should Be    ${ADDPAGE}

Empty Staff 
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000408
	Input Text    ${PNAME}    เครื่องทำลายเอกสาร
	Select From List By Value    ${PTYPE}    ครุภัณฑ์สำนักงาน
    Input Text    ${DETAIL}    IDEAL 3104
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Unavailable
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter person in charge name
    Location Should Be    ${ADDPAGE}

Invalid Staff    
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Input Text    ${ID}    5602100000400
	Input Text    ${PNAME}    ระบบเครือข่ายคอมพิวเตอร์
	Select From List By Value    ${PTYPE}    ครุภัณฑ์คอมพิวเตอร์
    Input Text    ${DETAIL}    -
    Input Text    ${LOC}    SC6301
    Select From List By Value    ${STATUS}    Available
    Input Text    ${STAFF}    %$!@##$!@#
	Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter valid staff name
    Location Should Be    ${ADDPAGE}

Empty All   
    Go To    ${SERVER}
    Click Element    ${ADDBUTTON} 
    Click Button    ${SUBMIT}    
	Alert Should Be Present    Please enter equipment detail
    Location Should Be    ${ADDPAGE}
    Close Browser


