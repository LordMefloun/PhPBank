<?php 
class UsersView extends Users {
    public function renderUser($name){
        $user = $this->getUser($name);
        echo '<h2>Welcome '.$user['username'].' Your balance is '.$user['balance'].'$ </h2>';
    }

    public function renderIncomingTable($name){
        echo '<h1>Incoming</h1>';
        echo '<table>
        <tr>
          <th>Sender</th>
          <th>Reciever</th>
          <th>Amount</th>
        </tr>';
        foreach($this->getIncomingTransactions($name) as $obj){
            echo '  <tr>
            <td>'.$obj['sender'].'</td>
            <td>'.$obj['reciever'].'</td>
            <td>'.$obj['amount'].'</td>
          </tr>';
        }

        echo '</table>';
    }

    public function renderUserInput($name){
        echo '<select name="user">';
        foreach($this->getUsers() as $obj){
            if ($obj['username'] != $name){
                echo '<option value="'.$obj['username'].'">'.$obj['username'].'</option>';
            }
        }
        echo '</select>';
    }
    public function renderOutgoingTable($name){
        echo '<h1>Outcoming</h1>';
        echo '<table>
        <tr>
          <th>Sender</th>
          <th>Reciever</th>
          <th>Amount</th>
        </tr>';
        foreach($this->getOutcomingTransactions($name) as $obj){
            echo '  <tr>
            <td>'.$obj['sender'].'</td>
            <td>'.$obj['reciever'].'</td>
            <td>'.$obj['amount'].'</td>
          </tr>';
        }

        echo '</table>';
    }
}