*** Settings ***
Library    SeleniumLibrary

*** Variables *** 
${SERVER}    http://10.199.66.227/SoftEn2020/Sec02/SEP/admin.php
${BROWSER}    Chrome
${DELETE}    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td[6]/a
${DEL_ID}     cs-006

*** Test case ***
Open Browser
    #Set Selenium Speed    0.3
    Open Browser    ${SERVER}    ${BROWSER}
    Location Should Be    ${SERVER}

Cancel Delete 
	Click Element    ${DELETE}
	Handle Alert    dismiss
	Page Should Contain    ${DEL_ID}
Delete Success
	Click Element    ${DELETE}
	Handle Alert    accept
	Page Should Not Contain    ${DEL_ID}

Add Valid 
    Click Element    xpath://html/body/div/div/div[2]/a
    Input Text    PID    cs-090
	Input Text    PNAME    TV
	Input Text    PTYPE    Screen
	Input Text    PSTATUS    Available
	Click Button    btn
	Handle Alert    accept
    Wait Until Page Contains    cs-090
Add Empty Id
    Click Element    xpath://html/body/div/div/div[2]/a
    Input Text    PNAME    TV
	Input Text    PTYPE    Screen
	Input Text    PSTATUS    Available
	Click Button    btn
    Alert Should Be Present    กรุณากรอกรหัสอุปกรณ์
Add Repeated Id
    Input Text    PID    cs-090
	Input Text    PNAME    TV
	Input Text    PTYPE    Screen
	Input Text    PSTATUS    Available
	Click Button    btn
    Alert Should Be Present    Repeated Id
Add Empty Name
    Click Element    xpath://html/body/div/div/div[2]/a
    Input Text    PID    cs-091
	Input Text    PTYPE    Screen
	Input Text    PSTATUS    ยืมไม่ได้
	Click Button    btn
    Alert Should Be Present    กรุณากรอกชื่ออุปกรณ์
Add Empty Type
    Click Element    xpath://html/body/div/div/div[2]/a
    Input Text    PID    cs-092
	Input Text    PNAME    Computer
	Input Text    PSTATUS    ยืมไม่ได้
	Click Button    btn
    Alert Should Be Present    กรุณากรอกประเภทของอุปกรณ์
Add Empty Status
    Click Element    xpath://html/body/div/div/div[2]/a
    Input Text    PID    cs-093
	Input Text    PNAME    Computer
	Input Text    PTYPE    อุปกรณ์
	Click Button    btn
    Alert Should Be Present    กรุณากรอกสถานะของอุปกรณ์
Add Empty All
    Click Element    xpath://html/body/div/div/div[2]/a
    Click Button    btn
    Alert Should Be Present    กรุณากรอกรหัสอุปกรณ์

Edit Name
	Click Element    xpath:/html/body/div/div/div[1]/div/a[1]
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    	T.V.
	Click Button    btn
	Handle Alert    accept
    Wait Until Page Contains    T.V.
Edit Type
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PTYPE    	TypeA
	Click Button    btn
	Handle Alert    accept
    Wait Until Page Contains    TypeA
Edit Status
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PSTATUS     ซ่อม
	Click Button    btn
	Handle Alert    accept
    Wait Until Page Contains    ซ่อม
Edit Name Empty
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    ${empty}
	Click Button    btn
	Alert Should Be Present    กรุณากรอกชื่ออุปกรณ์
Edit Type Empty
    Click Element    xpath:/html/body/div/div/div[1]/div/a[1]
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    Airs
	Input Text    PTYPE    ${empty}
	Input Text    PSTATUS     ซ่อม
	Click Button    btn
	Alert Should Be Present    กรุณากรอกประเภทของอุปกรณ์
Edit Status Empty
    Click Element    xpath:/html/body/div/div/div[1]/div/a[1]
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    Airs
	Input Text    PTYPE    TypeB
	Input Text    PSTATUS    ${empty}
	Click Button    btn
	Alert Should Be Present    กรุณากรอกสถานะของอุปกรณ์
No Change
    Click Element    xpath:/html/body/div/div/div[1]/div/a[1]
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    Airs
	Input Text    PTYPE    TypeB
	Input Text    PSTATUS    ซ่อม
	Click Button    btn
	Alert Should Be Present    Update
All Empty
	Click Element    xpath://html/body/div/div/div[2]/table/tbody/tr[2]/td/a
	Input Text    PNAME    ${empty}
	Input Text    PTYPE    ${empty}
	Input Text    PSTATUS    ${empty}
	Click Button    btn
	Alert Should Be Present    กรุณากรอกชื่ออุปกรณ์
    Close Browser

	





