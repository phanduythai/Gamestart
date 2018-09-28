$x  =   5;  //  global  scope
function    myTest()    {
//  Sử dụng biến x  trong hàm sẽ gây ra lỗi
echo    "<p>Giá trị biến x  là: $x</p>";
}   
myTest();
echo    "<p>Giá trị biến x  là: $x</p>";
HN