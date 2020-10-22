$name   =  filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$document = filter_input(INPUT_POST, 'document',FILTER_SANITIZE_STRING);
$documentAdd = filter_input(INPUT_POST, 'documentAdd',FILTER_SANITIZE_STRING);
$birthDate = filter_input(INPUT_POST, 'birthDate',FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone',FILTER_SANITIZE_STRING);
$andress = filter_input(INPUT_POST, 'andress',FILTER_SANITIZE_STRING);
$numerAcount = filter_input(INPUT_POST, 'numberAccount',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$holder = new Holder();
$account = new Account();

$holder->setName($name);
$holder->setEmail($email);
$holder->setDocument($document);
$holder->setDocumentAdd($documentAdd);
$holder->setBirthDate($birthDate);
$holder->setPhone($phone);
$holder->setAndress($andress);
$holder->setNumberAccount($numerAcount);
$holder->setPassword($password);

$account->setNumberAccount($holder->getNumberAccount());

$con = Connection::creatConnection();
$resourceHolder = new ResourceHolder($con, $holder);
$resourceAccount = new ResourceAccount($con, $account);

$resourceHolder->insert($holder);
$resourceAccount->insert($account);

header('Location: /home');