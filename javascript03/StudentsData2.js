const student=[
    {
        prefix: "Mr.",
        firstName: "Worapoj",
        lastName: "Suwanpipob",
        height: 170,
    },
    {
        prefix: "Mr.",
        firstName: "Supphitan",
        lastName: "Paksawad",
        height: 185,
    },
    {
        prefix: "Mr.",
        firstName: "Narawit",
        lastName: "Khomsan",
        height: 178,
    },
    {
        prefix: "Miss.",
        firstName: "Dararat",
        lastName: "Tasachan",
        height: 165,
    },
];
let height="";
student.forEach(element => {
    let dummy=element.prefix+element.firstName+" "+element.lastName;
    if(element.prefix=="Miss."){
        if(element.height>=170){
            console.log(dummy+", She is very tall");
        }else{
            console.log(dummy+", She is very short");
        }
    }
    else{
        if(element.height>=180){
            console.log(dummy+", He is very tall");
        }else{
            console.log(dummy+", He is very short");
        }
    }
    
});