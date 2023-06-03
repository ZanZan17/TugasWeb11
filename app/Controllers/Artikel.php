
  public function delete($id)
  {
    $artikel = new ArtikelModel();
    $artikel->delete($id);
    return redirect('admin/artikel');
  }
}