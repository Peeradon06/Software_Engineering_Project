*** Settings ***
Library    SeleniumLibrary

*** Variables *** 
${SERVER}    http://10.199.66.227/SoftEn2020/Sec02/SEP/
${ADDPAGE}    http://10.199.66.227/SoftEn2020/Sec02/SEP/
${BROWSER}    Chrome
${BORLIST}    xpath://*[@id="Borrowing"]
${CHECKIN}    xpath://html/body/table/tbody/tr/td[5]/a    
${CHECKINFO}    xpath://html/body/div/div/div/div/a[2]
${CHECKFIELD}    CheckField
${CHECKSUB}    xpath://html/body/div/form/div/div/div[2]/div/input
${BACK}    xpath://html/body/div/form/div/div/div[2]/div/a


*** Test case ***

# Check in Success

Valid Date
    Open Browser    http://10.199.66.227/SoftEn2020/Sec02/SEP/checkin_list.php?ID=5602100000413    ${BROWSER}
    Click Element    ${CHECKINFO}
    Input Text      ${CHECKFIELD}    02/02/2020
    Click Element    ${CHECKSUB}
    Handle Alert    accept
    Go To    http://10.199.66.227/SoftEn2020/Sec02/SEP/info.php?ID=5602100000413
    Page Should Contain    Available

Empty Date 
    Open Browser    http://10.199.66.227/SoftEn2020/Sec02/SEP/checkin_list.php?ID=5502130000406    ${BROWSER}
    Click Element    ${CHECKINFO}
    Click Element    ${CHECKSUB}
    Handle Alert    accept
    Go To    http://10.199.66.227/SoftEn2020/Sec02/SEP/info.php?ID=5602100000406
    Page Should Contain    Borrowed

# Check in Fail

Invalid Date #1
    Open Browser    http://10.199.66.227/SoftEn2020/Sec02/SEP/checkin_list.php?ID=5602100000407    ${BROWSER}
    Click Element    ${CHECKINFO}
    Input Text    ${CHECKFIELD}    005/02/22214
    Click Element    ${CHECKSUB}
    Alert Should Be Present    Please enter valid date ( ex. 02/02/2020 )

Invalid Date #2
    Input Text    ${CHECKFIELD}    %$##^@#@$
    Click Element    ${CHECKSUB}
    Alert Should Be Present    Please enter valid date ( ex. 02/02/2020 )

Cancel Check
    Open Browser    http://10.199.66.227/SoftEn2020/Sec02/SEP/checkin_list.php?ID=5602100000407    ${BROWSER}
    Click Element    ${CHECKINFO}
    Click Element    ${BACK}
    Page Should Contain    Borrowed
    Close Browser

