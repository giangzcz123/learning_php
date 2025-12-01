function add(a, b) {
  return a + b;
}
const cities = [
  "Hà Nội",
  "Hải Phòng",
  "Huế",
  "Đà Nẵng",
  "Hồ Chí Minh",
  "Nha Trang",
  "Đà Lạt",
  "Cần Thơ",
  "Nam Định",
  "Quảng Ninh",
];
function indanhsach() {
  let a = [
    { hoTen: "Nguyễn Trường Giang", msv: "74DCTT22246", nhom: 10 },
    { hoTen: "Nguyễn Quang Huy", msv: "74DCTT22236", nhom: 1 },
    { hoTen: "Nguyễn Văn Minh", msv: "74DCTT21236", nhom: 2 },
    { hoTen: "Nguyễn Lãng Cọc", msv: "74DCTT21234", nhom: 3 },
  ];
  console.log(a);
}
function process(x, callback) {
  console.log("Giá trị " + x);
  callback();
}
function done() {
  console.log("Xử lý xong!");
}
function factorial(n) {
  if (n == 0) return 1;
  return n * factorial(n - 1);
}
indanhsach();
console.log("demo đệ quy");
console.log(factorial(5));
console.log("demo callback");
console.log(process(5, done));
window.onload = function () {
  let tong = add(5, 7); // ví dụ 5 + 7
  document.getElementById("ketQua").innerText =
    "Kết quả của phép cộng là " + tong;
};
