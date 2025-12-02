function add(a, b) {
  return a + b;
}

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
console.log(window.innerWidth); // Chiều rộng của sổ trình duyệt
console.log(window.innerHeight); // Chiều cao của sổ trình duyệt
console.log(window.screen.width); // Độ rộng của màn hình
console.log(window.screen.height); // Độ cao của màn hình
function changeText() {
  let title = document.getElementById("title");
  title.innerText = "Nội dung đã thay đổi!";
  title.style.color = "blue";
  title.style.fontWeight = "bold";

  let descriptions = document.getElementsByClassName("description");

  descriptions[0].classList.add("highlight");
}
function replaceElement() {
  // Lấy thẻ img từ id
  let img = document.getElementById("image");

  // Tạo một thẻ p mới thay thế hình ảnh
  let newText = document.createElement("p");
  newText.innerText = "Hình ảnh đã được thay thế bằng đoạn văn!";
  newText.style.color = "red";
  newText.style.fontWeight = "bold";
  newText.style.fontSize = "24px";
  newText.style.textAlign = "center";

  // Thay thế thẻ img bằng đoạn p
  img.parentNode.replaceChild(newText, img);
}
function getStyle() {
  let element = document.getElementById("text");
  let style = window.getComputedStyle(element);

  let color = style.color;
  let fontSize = style.fontSize;
  let fontWeight = style.fontWeight;

  document.getElementById(
    "result"
  ).innerHTML = `Màu chữ: ${color} <br> Kích thước chữ: ${fontSize} <br> Độ đậm: ${fontWeight}`;
}

function setStyle() {
  let element = document.getElementById("text");

  element.style.color = "red";
  element.style.fontSize = "25px";
  element.style.fontWeight = "normal";
  element.style.backgroundColor = "yellow";
}
