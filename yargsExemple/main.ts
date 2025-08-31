// npm i yargs --save
// npm i @types/node @types/yargs --save-dev || -D


import * as yargs from "yargs";

console.log("----- Testando conceitos com yargs -----");

const argv: any = yargs.demandOption("num").argv;

const num = argv.num;

console.log("O NUMERO QUE FOI DIGITADO FOI:");
console.log(num);
console.log("==========================");

