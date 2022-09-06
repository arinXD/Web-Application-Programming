const subject=[
    {
        subjectID: "SC362004",
        subjectName: "Web Application Programming",
        score: 85,
        credit: 3,
    },
    {
        subjectID: "SC362001",
        subjectName: "Operating Systems",
        score: 60,
        credit: 3,
    },
    {
        subjectID: "SC362002",
        subjectName: "Algorithms and Data Structures",
        score: 65,
        credit: 3,
    },
    {
        subjectID: "SC362005",
        subjectName: "Database Analysis and Design",
        score: 72,
        credit: 3,
    },
]
let grade={}
subject.forEach(element => {
    if(element.score >=80){
        grade[element.subjectID]=["A",4]
    }
    else if(element.score >=75){
        grade[element.subjectID]=["B+",3.5]
    }
    else if(element.score >=70){
        grade[element.subjectID]=["B",3]
    }
    else if(element.score >=65){
        grade[element.subjectID]=["C+",2.5]
    }
    else if(element.score >=60){
        grade[element.subjectID]=["C",2]
    }
    else if(element.score >=55){
        grade[element.subjectID]=["D+",1.5]
    }
    else if(element.score >=50){
        grade[element.subjectID]=["D",1]
    }else{
        grade[element.subjectID]=["F",0]
    }
    console.log("รหัสวิชา "+ element.subjectID+" ชื่อรายวิชา: "+element.subjectName+" เกรด(ตัวอักษร): "+grade[element.subjectID][0]+" เกรด(ตัวเลข): "+grade[element.subjectID][1]+" หน่วยกิต: 3");
});