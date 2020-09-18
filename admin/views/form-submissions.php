<h1>Form Submissions</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Contact ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email ID</th>
        <th scope="col">Company</th>
        <th scope="col">Message</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data['listContact'] as $item) {
        echo '<tr>
                    <td>' . $item['contactID'] . '</td>
                    <td>' . $item['firstName'] . '</td>
                    <td>' . $item['lastName'] . '</td>
                    <td>' . $item['email'] . '</td>
                    <td>' . $item['company'] . '</td>
                    <td>' . $item['message'] . '</td>
                   </tr>';

    } ?>
    </tbody>
</table>
