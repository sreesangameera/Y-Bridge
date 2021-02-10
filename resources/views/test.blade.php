<form method="POST" action="/upcomingeventsadmin" enctype="multipart/form-data">
        @csrf
        
        <div title="Link">Link</div><input class="form-control" type="text" name="link" placeholder="Link" required="required" value="{{ $c->Link}}"><br>
        <input type="hidden" name="ename" value="{{ $c->EName}}" >
        <div title="firstname">Date</div><input class="form-control" type="text" name="date" placeholder="Date" required="required" value="{{ $c->Date}}"><br>
        <div title="event name">Event Name</div><input class="form-control" type="text" name="ename" placeholder="Event Name" required="required" value="{{ $c->EName}}"><br>
        <div title="description">Description</div><input class="form-control" type="text" name="description" placeholder="Description" required="required" value="{{ $c->Description}}"><br>
       <input class="btn btn-primary" type="submit" value="submit">
        
    </form>