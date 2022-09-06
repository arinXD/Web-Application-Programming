const student=[
    {
        "prefix":"นาย",
        "firstName":"วรพจน์",
        "lastName":"สุวรรณภิภพ",
        "advisor":"รศ. ดร.งามนิจ อาจอินทร์",
    },
    {
        "prefix":"นาย",
        "firstName":"นราวิชญ์",
        "lastName":"คมสัน",
        "advisor":"ผศ. ดร.ปวีณา วันชัย",
    },
    {
        "prefix":"นาย",
        "firstName":"สุพพิธาน",
        "lastName":"ภักสวัสดิ์",
        "advisor":"ผศ. ดร. อ.สายยัญ สายยศ",
    },
    {
        "prefix":"นางสาว",
        "firstName":"ดารารัตน์",
        "lastName":"ทาสาจันทร์",
        "advisor":"ผศ. ดร.ปวีณา วันชัย",
    },

]
let advisor1="รศ. ดร.งามนิจ อาจอินทร์"
let advisor2="ผศ. ดร.ปวีณา วันชัย"
let advisor3="ผศ. ดร. อ.สายยัญ สายยศ"
let a1=a2=a3=0;

console.log("จำนวนนักศึกษาทั้งหมด"+student.length);
student.forEach(element => {
    if(element.advisor==advisor1){
        a1++;
    }
    else if(element.advisor==advisor2){
        a2++;
    }
    else{
        a3++;
    }
});
console.log(advisor1+" มีนักศึกษา "+a1+" คน");
console.log(advisor2+" มีนักศึกษา "+a2+" คน");
console.log(advisor3+" มีนักศึกษา "+a3+" คน");
