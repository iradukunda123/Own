@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Own\Xamp\hypersonic\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Own\Xamp\ingres\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\ingres\scripts\ctl.bat START)
if exist C:\Own\Xamp\mysql\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\mysql\scripts\ctl.bat START)
if exist C:\Own\Xamp\postgresql\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\postgresql\scripts\ctl.bat START)
if exist C:\Own\Xamp\apache\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\apache\scripts\ctl.bat START)
if exist C:\Own\Xamp\openoffice\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\openoffice\scripts\ctl.bat START)
if exist C:\Own\Xamp\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\apache-tomcat\scripts\ctl.bat START)
if exist C:\Own\Xamp\resin\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\resin\scripts\ctl.bat START)
if exist C:\Own\Xamp\jetty\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\jetty\scripts\ctl.bat START)
if exist C:\Own\Xamp\subversion\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Own\Xamp\lucene\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\lucene\scripts\ctl.bat START)
if exist C:\Own\Xamp\third_application\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Own\Xamp\third_application\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\third_application\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\lucene\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Own\Xamp\subversion\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\subversion\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\jetty\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\jetty\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\hypersonic\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\resin\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\resin\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Own\Xamp\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\openoffice\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\openoffice\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\apache\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\apache\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\ingres\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\ingres\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\mysql\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\mysql\scripts\ctl.bat STOP)
if exist C:\Own\Xamp\postgresql\scripts\ctl.bat (start /MIN /B C:\Own\Xamp\postgresql\scripts\ctl.bat STOP)

:end

