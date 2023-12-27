let currentBalance = 500.00; // Başlangıç bakiyesi

function showBalance(event) {
    event.preventDefault();
    hideAllForms();
    document.getElementById('balanceSection').style.display = 'block';
}

function showReceiveMoneyForm(event) {
    event.preventDefault();
    hideAllForms();
    document.getElementById('receiveMoneyForm').style.display = 'block';
}

function showTransactionHistory(event) {
    event.preventDefault();
    hideAllForms();
    document.getElementById('transactionHistory').style.display = 'block';
    populateTransactionHistory(); // İşlem geçmişini doldur
}

function hideAllForms() {
    const sections = document.querySelectorAll('.wallet-section');
    sections.forEach(section => (section.style.display = 'none'));
}

function updateBalance() {
    // Bakiye güncelleme işlemi yapılmayacak
    alert("Bakiye güncellemesi yapmak için para gönderme veya alma işlemi gerçekleştirin.");
}


function receiveMoney(event) {
    event.preventDefault();
    const receivedAmount = +document.getElementById('receivedAmount').value;
    currentBalance += receivedAmount;
    alert(`Para alındı! Miktar: $${receivedAmount.toFixed(2)}`);
    addToTransactionHistory(`Alındı: Gönderen, Miktar: $${receivedAmount.toFixed(2)}`);
    document.getElementById('balance').innerText = `$${currentBalance.toFixed(2)}`;
}

function addToTransactionHistory(transaction) {
    const transactionHistoryList = document.getElementById('transactionHistoryList');
    const li = document.createElement('li');
    li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
    li.innerText = transaction;

    const deleteButton = document.createElement('button');
    deleteButton.classList.add('btn', 'btn-danger', 'btn-sm');
    deleteButton.innerText = 'Sil';
    deleteButton.onclick = function () {
        li.remove();
    };

    li.appendChild(deleteButton);
    transactionHistoryList.appendChild(li);
}

function populateTransactionHistory() {
    // İşlem geçmişini doldurmak için kullanılabilir
    // Örneğin, bir API'den işlem geçmişi verileri alınabilir
    // Bu örnekte sadece varsayılan bir işlem ekleniyor
}
function showCardInfo(event) {
    event.preventDefault();
    hideAllSections();  // Tüm bölümleri gizle

    // Sadece tıklanan kısmı görünür yap
    document.getElementById('card-info-form').style.display = 'block';
}

// money.js

function paraGonder(event) {
    event.preventDefault();

    // Form verilerini alın
    const alici = document.getElementById('alici').value;
    const gonderilenMiktar = document.getElementById('gonderilenMiktar').value;

    // Doğrulama mantığınızı buraya ekleyin

    // Para göndermek için bir AJAX isteği yapın
    axios.post('/para-gonder', { alici, gonderilenMiktar })
        .then(response => {
            // Başarıyla ele alın
            console.log(response.data.mesaj);
            // Arayüzü güncellemek veya başarı mesajı göstermek isteyebilirsiniz
        })
        .catch(error => {
            // Hataları ele alın
            console.error(error.response.data.mesaj);
            // Kullanıcıya bir hata mesajı göstermek isteyebilirsiniz
        });
}

